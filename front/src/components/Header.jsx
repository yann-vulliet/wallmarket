import React from 'react';
import { NavLink } from "react-router-dom";
import NavBar from '../components/NavBar';
import NavDashboard from '../components/NavDashboard';
import Banner from '../assets/img/header.jpg';

import Token from './Token';


const Header = () => {
    const tokenValid = Token.getExpiryTime();
    return (
        <header>
            {tokenValid
                ? <NavDashboard />
                : <NavLink to="/"><img src={Banner} alt="Banner" /></NavLink>
            }
            <NavBar />
        </header>
    );
}


export default Header;