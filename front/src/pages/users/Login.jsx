import React from 'react';
import axios from "axios";
import { useState, useEffect } from 'react';
import { useNavigate } from "react-router-dom";
import { API_ROUTES } from '../../components/Api';

const Login = () => {
    const navigate = useNavigate();
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [validationError, setValidationError] = useState({});

    const login = async (e) => {
        e.preventDefault();

        const formData = new FormData();

        formData.append("email", email);
        formData.append("password", password);

        try {
            const response = await axios.post(API_ROUTES.LOGIN, formData);
            const access_token = response.data.data.access_token.token;
            localStorage.setItem('access_token', access_token);
            navigate('/');
            window.location.reload();
        } catch ({ response }) {
            if (response && response.status === 422) {
                setValidationError(response.data.errors);
            }
        }
    };

    // const setAuthHeader = () => {
    //     const access_token = localStorage.getItem('access_token');
    //     if (token) {
    //         axios.defaults.headers.common['access_token'] = `Bearer ${access_token}`;
    //     } else {
    //         delete axios.defaults.headers.common['access_token'];
    //     }
    // };

    // useEffect(() => {
    //     setAuthHeader();
    // }, []);

    return (
        <div className='connection container'>
            {Object.keys(validationError).length > 0 && (
                <ul>
                    {Object.entries(validationError).map(
                        ([key, value]) => (
                            <li key={key}>{value}</li>
                        )
                    )}
                </ul>
            )}
            <form onSubmit={login}>
                <div>
                    <label htmlFor="email">Email</label>
                    <input type="email" name="email" id="email" onChange={(event) => { setEmail(event.target.value); }} />
                </div>
                <div>
                    <label htmlFor="password">Password</label>
                    <input type="password" name="password" id="password" onChange={(event) => { setPassword(event.target.value); }} />
                </div>
                <div className="right">
                    <button type="submit" className="btn">Valider</button>
                </div>
            </form>
        </div>
    );
}

export default Login;