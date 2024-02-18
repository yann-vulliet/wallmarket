import React from 'react';
import { NavLink } from "react-router-dom";

const Footer = () => {
    return (
        <footer>
            <div className='footer container flex'>
                <NavLink to={`/login`} className="btn no-border main-color right"> S'identifier </NavLink>
                <NavLink to={`/register`} className="btn no-border main-color right"> Register </NavLink>
                <NavLink to={`/logout`} className="btn no-border main-color right"> Logout </NavLink>
            </div>
        </footer>
    );
}

export default Footer;