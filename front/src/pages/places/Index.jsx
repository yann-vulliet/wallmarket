import React from 'react';
import { NavLink, useParams } from "react-router-dom";
import { useState, useEffect } from 'react';
import axios from "axios";
import { API_ROUTES } from '../../components/Api';

const ShowCategories = () => {
    const { category } = useParams();
    const [places, setPlaces] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const getPlaces = async () => {
            try {
                const response = await axios.get(API_ROUTES.PLACES + '/' + category);
                setPlaces(response.data);
            } catch (error) {
                console.error('Erreur:', error);
            } finally {
                setLoading(false);
            }
        };
        getPlaces()
    }, [category]);

    if (loading) {
        return <div></div>;
    }

    return (
        <div className='main container'>
            <div className='flex-column'>
                {places.map((place, index) => (
                    <div key={index} className='flex-column center'>
                        <h2>{place.title}</h2>
                        <h4>{place.subtitle}</h4>
                        <div className="carousel">
                            {place.pictures && place.pictures.length > 0 ? (
                                <div>
                                    <img src={`${API_ROUTES.IMG}${place.pictures[0].picture}`} alt={place.pictures[0].alt_picture} className='center width256' />
                                    <p className='left'>{place.description}</p>
                                </div>
                            ) : <p className='left'>{place.description}</p>}
                        </div>
                        <div className="right">
                            <NavLink to={`/place/${place.id}`} className="btn no-border main-color right index"> Voir le contenu </NavLink>
                        </div>
                        <hr />
                    </div>
                ))}
            </div>
        </div>
    );
}

export default ShowCategories;