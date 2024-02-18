import React from "react";
import { API_ROUTES } from '../../components/Api';
import axios from "axios";
import { useState, useEffect } from 'react';
import { NavLink, useParams } from "react-router-dom";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faTrash } from '@fortawesome/free-solid-svg-icons';

const ArticlePictures = () => {
    const [pictures, setPictures] = useState(true);
    const [loading, setLoading] = useState(true);
    const [photo, setPhoto] = useState("");
    const { articleId } = useParams();

    useEffect(() => {
        const getArticle = async () => {
            try {
                const response = await axios.get(API_ROUTES.PICTURES + '/' + articleId, {
                    headers: {
                        Authorization: "Bearer" + localStorage.getItem("access_token"),
                    },
                });
                setPictures(response.data);
            } catch (error) {
                console.error('Erreur:', error);
            } finally {
                setLoading(false);
            }
        };
        getArticle()
    }, [articleId]);

    const changeHandler = (event) => {
        setPhoto(event.target.files[0]);
        console.log(event.target.files[0]);
    }

    useEffect(() => {
        if (photo) {
            uploadImage();
        }
    }, [photo]);

    const uploadImage = async () => {
        const formData = new FormData();
        formData.append('picture', photo);
        formData.append('article_id', articleId);

        if (photo) {
            try {
                await axios.post(API_ROUTES.PICTURES, formData, {
                    headers: {
                        Authorization: "Bearer" + localStorage.getItem("access_token"),
                    },
                });
                console.log("4");
                window.location.reload();
            } catch (error) {
                console.log("5");
                console.error('Erreur lors de l\'envoi de l\'image:', error);
            }
        }
    };

    const deleteArticle = async (articleId) => {
        try {
            await axios.delete(API_ROUTES.PICTURES + '/' + articleId, {
                headers: {
                    Authorization: "Bearer" + localStorage.getItem("access_token"),
                },
            });
            window.location.reload();
        } catch (error) {
            console.error('Error deleting article:', error);
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
                <form action="" encType="multipart/form-data">
                    <label htmlFor="file" className="btn" >Ajouter une image</label>
                    <input type="file" id="file" accept="image/*" onChange={changeHandler} />
                </form>
            </div>
            {pictures.map((picture, index) => (
                <div key={index} className='flex container main'>
                    <div className='img-config'>
                        <img src={`${API_ROUTES.IMG}${picture.picture}`} alt={picture.alt_picture} className="width480" />
                        <button onClick={() => deleteArticle(picture.id)} className="btn no-border color-red"><FontAwesomeIcon icon={faTrash} /></button>
                    </div>
                </div>
            ))}
        </div>
    );
}

export default ArticlePictures;