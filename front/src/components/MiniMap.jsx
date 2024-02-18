import React from 'react';
import { useState, useEffect } from 'react';
import axios from "axios";
import { API_ROUTES } from '../components/Api';
import Map from '../assets/img/mini-map.png';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faLocationDot } from '@fortawesome/free-solid-svg-icons';
import { NavLink } from 'react-router-dom';

const MiniMap = () => {

    const [places, setPlaces] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const getPlaces = async () => {
            try {
                const response = await axios.get(API_ROUTES.PLACES);
                setPlaces(response.data);
            } catch (error) {
                console.error('Erreur:', error);
            } finally {
                setLoading(false);
            }
        };
        getPlaces()
    }, []);

    if (loading) {
        return <div></div>;
    }

    return (
        <div className='home_map'>
            {places.map((place, index) => (
                <NavLink to={`/place/${place.id}`} key={index}>
                    <FontAwesomeIcon icon={faLocationDot} style={{ top: place.latitude, left: place.longitude }} />
                    <div className='none btn' style={{ top: `calc(${place.latitude} - 10%)`, left: `calc(${place.longitude} - 100px)` }}>{place.title}</div>
                </NavLink>
            ))}
            <img src={Map} alt={Map} />
        </div>
    );
}

export default MiniMap;