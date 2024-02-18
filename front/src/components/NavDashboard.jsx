import { useState, useEffect } from 'react';
import axios from "axios";
import { API_ROUTES } from '../components/Api';
import React from 'react';
import { NavLink } from "react-router-dom";

import Token from './Token';


const NavDashboard = () => {
    const tokenRole = Token.getRoles();
    return (
        <nav className=''>
            <div className='container flex justify-between nav-margin'>
                <div className='flex justify-between NavDashboard'>
                    <NavLink to='/articles' className="btn no-border main-color">Articles</NavLink>
                    <NavLink to='/places' className="btn no-border main-color">Lieux</NavLink>
                </div>
                {tokenRole == 1 &&
                    <div className='flex justify-between NavDashboard'>
                        <NavLink to='/users' className="btn no-border main-color">Utilisateur</NavLink>
                        <NavLink to='/roles' className="btn no-border main-color">Roles</NavLink>
                        <NavLink to='/categories' className="btn no-border main-color">Catégories</NavLink>
                    </div>
                }
            </div>
            <hr />
        </nav>
    );
}

export default NavDashboard;