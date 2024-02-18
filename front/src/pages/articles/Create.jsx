import React from "react";
import { API_ROUTES } from '../../components/Api';
import axios from "axios";
import { useState, useEffect } from 'react';
import { useNavigate } from "react-router-dom";

const AddArticle = () => {
    const navigate = useNavigate();
    const [places, setPlaces] = useState([]);
    const [loading, setLoading] = useState(true);

    const [title, setTitle] = useState("");
    const [subtitle, setSubtitle] = useState("");
    const [description, setDescription] = useState("");
    const [placeId, setPlaceId] = useState("");
    const [validationError, setValidationError] = useState({});

    useEffect(() => {
        const getPlaces = async () => {
            try {
                const response = await axios.get(API_ROUTES.PLACES);
                setPlaces(response.data);
            } catch (error) {
                console.error('Error fetching data:', error);
            } finally {
                setLoading(false);
            }
        };
        getPlaces();
    }, []);


    const article = async (e) => {
        e.preventDefault();

        const formData = new FormData();

        formData.append("title", title);
        formData.append("subtitle", subtitle);
        formData.append("description", description);
        formData.append("place_id", placeId);

        try {
            await axios.post(API_ROUTES.ARTICLE, formData, {
                headers: {
                    Authorization: "Bearer" + localStorage.getItem("access_token"),
                },
            });
            navigate('/articles');
        } catch ({ response }) {
            if (response && response.status === 422) {
                setValidationError(response.data.errors);
            }
        }
    };

    if (loading) {
        return <div></div>;
    }

    return (
        <div className="main container">
            <div className="border table-index">
                <form onSubmit={article}>
                    <div>
                        <label htmlFor="title">Titre</label>
                        <input type="text" name="title" id="title" defaultValue="" onChange={(event) => { setTitle(event.target.value); }} />
                    </div>
                    <div>
                        <label htmlFor="subtitle">Sous-Titre</label>
                        <input type="text" name="subtitle" id="subtitle" defaultValue="" onChange={(event) => { setSubtitle(event.target.value); }} />
                    </div>
                    <div>
                        <label htmlFor="description">Description</label>
                        <textarea name="description" id="description" defaultValue="" onChange={(event) => { setDescription(event.target.value); }} />
                    </div>
                    <div>
                        <select name="placeId" id="placeId" onChange={(event) => { setPlaceId(event.target.value); }}>
                            <option>Aucun Lieu</option>
                            {places.map((place, index) => (
                                <option key={index} value={place.id}>{place.title}</option>
                            ))}
                        </select>
                    </div>
                    <div className="right">
                        <button type="submit" className="btn">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    );
}

export default AddArticle;