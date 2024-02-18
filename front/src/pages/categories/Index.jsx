import React from 'react';
import { NavLink } from "react-router-dom";
import { useState, useEffect } from 'react';
import axios from "axios";
import { API_ROUTES } from '../../components/Api';

const Index = () => {
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
        <div className='container'>
            {categories.map((category, index) => (
                <NavLink to={`/places/${category.id}`} className="" key={index}> {category.category} </NavLink>
            ))}
        </div>
    );
}

export default Index;