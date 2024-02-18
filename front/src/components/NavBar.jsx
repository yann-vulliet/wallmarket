import React from 'react';
import { NavLink } from "react-router-dom";
import { useState, useEffect } from 'react';
import axios from "axios";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHouse } from '@fortawesome/free-solid-svg-icons';
import { API_ROUTES } from '../components/Api';

const NavBar = () => {
    const [categories, setCategories] = useState([]);
    const getCategories = async () => {
        await axios
            .get(API_ROUTES.CATEGORY)
            .then((res) => setCategories(res.data));
    }
    useEffect(() => {
        getCategories()
    }, []);

    return (
        <nav className=''>
            <div className='container flex justify-between'>
                <NavLink to='/' className="btn no-border main-color" > <FontAwesomeIcon icon={faHouse} /> </NavLink>
                {categories.map((category, index) => (
                    <NavLink to={`/places/${category.id}`} className="btn no-border main-color" key={index}> {category.category} </NavLink>
                ))}
            </div>
        </nav>
    );
}

export default NavBar;