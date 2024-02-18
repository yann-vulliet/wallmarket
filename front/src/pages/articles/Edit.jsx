import React from "react";
import { API_ROUTES } from '../../components/Api';
import axios from "axios";
import { useState, useEffect } from 'react';
import { useNavigate, useParams } from "react-router-dom";

const EditArticle = () => {
    const { articleId } = useParams();
    const navigate = useNavigate();
    const [places, setPlaces] = useState([]);
    const [article, setArticle] = useState([]);
    const [pictures, setPictures] = useState([]);
    const [loading, setLoading] = useState(true);

    const [placeId, setPlaceId] = useState("");
    const [validationError, setValidationError] = useState({});

    useEffect(() => {
        const getArticle = async () => {
            try {
                const response = await axios.get(API_ROUTES.ARTICLE + '/' + articleId);
                setArticle(response.data.article);
                setPictures(response.data.picture);
            } catch (error) {
                console.error('Erreur:', error);
            } finally {
                setLoading(false);
            }
        };
        getArticle()
    }, []);

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

    function handleChange(event) {
        const selectedPlaceId = event.target.value;
        setPlaceId(selectedPlaceId);
    }

    const updateArticle = async (e) => {
        e.preventDefault();

        const formData = new FormData(e.target);
        formData.append('place_id', placeId);
        formData.append('_method', 'PUT');

        for (const [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
        }

        // correspond au FormData(e.target)

        // formData.append("title", title);
        // formData.append("subtitle", subtitle);
        // formData.append("description", description);
        // formData.append("place_id", placeId);

        try {
            await axios.post(API_ROUTES.ARTICLE + '/' + articleId, formData, {
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
                <form onSubmit={updateArticle}>
                    <div>
                        <label htmlFor="title">Titre</label>
                        <input type="text" name="title" id="title" defaultValue={article.title} />
                    </div>
                    <div>
                        <label htmlFor="subtitle">Sous-Titre</label>
                        <input type="text" name="subtitle" id="subtitle" defaultValue={article.subtitle} />
                    </div>
                    <div>
                        <label htmlFor="description">Description</label>
                        <textarea name="description" id="description" defaultValue={article.description} />
                    </div>
                    <div>
                        <select value={article.place_id} name="place_id" id="placeId" onChange={(event) => handleChange(event)}>
                            <option value="" >Aucun Lieu</option>
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

export default EditArticle;