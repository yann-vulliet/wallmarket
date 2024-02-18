import React from 'react';
import { NavLink } from "react-router-dom";
import { useState, useEffect } from 'react';
import axios from "axios";
import { API_ROUTES } from '../../components/Api';
import NoImage from '../../assets/img/no-image.png';

const ArticlesRandom = () => {
    const [pictures, setPictures] = useState([]);
    const [articles, setArticles] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const getArticles = async () => {
            try {
                const response = await axios.get(API_ROUTES.ARTICLE + '/home');
                setArticles(response.data);
            } catch (error) {
                console.error('Erreur:', error);
            } finally {
                setLoading(false);
            }
        };
        getArticles()
    }, []);

    if (loading) {
        return <div></div>;
    }

    return (
        <div className='flex articles_random'>
            {articles.map((article, index) => (
                <div key={index} className='flex-column center border'>
                    <h4>{article.title}</h4>
                    <div className="carousel">
                        {article.pictures && article.pictures.length > 0 ? (
                            <img src={`${API_ROUTES.IMG}${article.pictures[0].picture}`} alt={article.pictures[0].alt_picture} className='center width256' />
                        ) : <img src={NoImage} alt="pas d'image" className='center width256' />}
                    </div>
                    <p>{article.subtitle}</p>
                    <div className="right">
                        <NavLink to={`/article/${article.id}`} className="btn no-border main-color right"> en savoir + </NavLink>
                    </div>
                </div>
            ))}
        </div>
    );
}

export default ArticlesRandom;