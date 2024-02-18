import React from 'react';
import { useState, useEffect } from 'react';
import axios from "axios";
import { API_ROUTES } from '../../components/Api';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCircleChevronLeft, faCircleChevronRight } from '@fortawesome/free-solid-svg-icons';

const HomeShow = () => {
    const [pictures, setPictures] = useState([]);
    const [article, setArticle] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const getArticles = async () => {
            try {
                const response = await axios.get(API_ROUTES.ARTICLE + '/' + '1');
                setArticle(response.data.article);
                setPictures(response.data.picture);
            } catch (error) {
                console.error('Error fetching data:', error);
            } finally {
                setLoading(false);
            }
        };
        getArticles();
    }, []);


    const [currentIndex, setCurrentIndex] = useState(0);

    const previousSlide = () => {
        const newIndex = (currentIndex - 1 + pictures.length) % pictures.length;
        setCurrentIndex(newIndex);
    };

    const nextSlide = () => {
        const newIndex = (currentIndex + 1) % pictures.length;
        setCurrentIndex(newIndex);
    };

    if (loading) {
        return <div></div>;
    }

    return (
        <div className='flex home_show'>
            <div className='flex-column center'>
                <h2>{article.title}</h2>
                <h4>{article.subtitle}</h4>
                <div className="carousel">
                    {pictures && pictures.length > 0 ? (
                        <div className="carousel">
                            {pictures && pictures.length > 1 ? (
                                <div>
                                    <button onClick={previousSlide}><FontAwesomeIcon icon={faCircleChevronLeft} /></button>
                                    <button onClick={nextSlide}><FontAwesomeIcon icon={faCircleChevronRight} /></button>
                                </div>) : <div></div>}
                            <img src={`${API_ROUTES.IMG}${pictures[currentIndex].picture}`} alt={pictures[currentIndex].alt_picture} className='float-left width256' />
                            <p className='left'>{article.description}</p>
                        </div>
                    ) : <div><p className='left'>{article.description}</p></div>}
                </div>
            </div>
        </div>
    );
}

export default HomeShow;