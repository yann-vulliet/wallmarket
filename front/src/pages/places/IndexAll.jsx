import React from "react";
import { API_ROUTES } from '../../components/Api';
import axios from "axios";
import { useState, useEffect } from 'react';
import { NavLink } from "react-router-dom";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPenToSquare, faImage, faTrash } from '@fortawesome/free-solid-svg-icons';

const PlacesIndex = () => {
    const [places, setPlaces] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const getPlaces = async () => {
            try {
                const response = await axios.get(API_ROUTES.PLACES, {
                    headers: {
                        Authorization: "Bearer" + localStorage.getItem("access_token"),
                    },
                });
                setPlaces(response.data);
            } catch (error) {
                console.error('Error fetching data:', error);
            } finally {
                setLoading(false);
            }
        };
        getPlaces();
    }, []);

    const deletePlace = async (placeId) => {
        try {
            await axios.delete(API_ROUTES.PLACE + '/' + placeId, {
                headers: {
                    Authorization: "Bearer" + localStorage.getItem("access_token"),
                },
            });
            window.location.reload();
        } catch (error) {
            console.error('Error deleting place:', error);
        } finally {
            setLoading(false);
        }
    };

    if (loading) {
        return <div></div>;
    }

    return (
        <div className="main container">
            <div className="new-one">
                <NavLink to="/places/create" className="btn no-border main-color">Nouveau lieu</NavLink>
            </div>
            <div className='flex-column'>
                <table className='border table-index'>
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Sous-titre</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {places.map((place, index) => (
                            <tr key={index} >
                                <td>{place.title}</td>
                                <td>{place.subtitle}</td>
                                <td className="center">
                                    <div>
                                        <NavLink to={`/picture/${place.id}`} className="btn no-border color-green"><FontAwesomeIcon icon={faImage} /></NavLink>
                                        <NavLink to={`/places/edit/${place.id}`} className="btn no-border color-blue"><FontAwesomeIcon icon={faPenToSquare} /></NavLink>
                                        <button onClick={() => deletePlace(place.id)} className="btn no-border color-red right"><FontAwesomeIcon icon={faTrash} /></button>
                                    </div>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </div>
    );
}

export default PlacesIndex;