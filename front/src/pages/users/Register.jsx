import React from 'react';
import axios from "axios";
import { useState } from 'react';
import { useNavigate } from "react-router-dom";
import { API_ROUTES } from '../../components/Api';

const Register = () => {
    const navigate = useNavigate();
    const [firstName, setFirstName] = useState("");
    const [lastName, setLastName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [validationError, setValidationError] = useState({});

    const register = async (e) => {
        e.preventDefault();

        const formData = new FormData();

        formData.append("firstName", firstName);
        formData.append("lastName", lastName);
        formData.append("email", email);
        formData.append("password", password);

        try {
            await axios.post(API_ROUTES.REGISTER, formData);
            navigate('/');
        } catch ({ response }) {
            if (response && response.status === 422) {
                setValidationError(response.data.errors);
            }
        }
    };

    return (
        <div className='container'>
            {Object.keys(validationError).length > 0 && (
                <ul>
                    {Object.entries(validationError).map(
                        ([key, value]) => (
                            <li key={key}>{value}</li>
                        )
                    )}
                </ul>
            )}
            <form onSubmit={register}>
                <div>
                    <label htmlFor="firstName">Prénom</label>
                    <input type="text" name="firstName" id="firstName" onChange={(event) => { setFirstName(event.target.value); }} />
                </div>
                <div>
                    <label htmlFor="lastName">Nom</label>
                    <input type="text" name="lastName" id="lastName" onChange={(event) => { setLastName(event.target.value); }} />
                </div>
                <div>
                    <label htmlFor="email">Email</label>
                    <input type="email" name="email" id="email" onChange={(event) => { setEmail(event.target.value); }} />
                </div>
                <div>
                    <label htmlFor="password">Password</label>
                    <input type="password" name="password" id="password" onChange={(event) => { setPassword(event.target.value); }} />
                </div>
                <div className="right">
                    <button type="submit" className='btn'>Valider</button>
                </div>
            </form>
        </div>
    );
}

export default Register;