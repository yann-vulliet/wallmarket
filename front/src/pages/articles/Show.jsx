import React from 'react';
import { NavLink, useParams } from "react-router-dom";
import { useState, useEffect } from 'react';
import axios from "axios";
import { API_ROUTES } from '../../components/Api';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCircleChevronLeft, faCircleChevronRight, faLocationDot } from '@fortawesome/free-solid-svg-icons';
import Map from '../../assets/img/mini-map.png';

const Show = () => {
    const [pictures, setPictures] = useState([]);
    const [articles, setArticle] = useState([]);
    const [places, setPlaces] = useState([]);
    const [loading, setLoading] = useState(true);
    const { article } = useParams();
    const place = articles.place_id

    useEffect(() => {
        const getArticle = async () => {
            try {
                const response = await axios.get(API_ROUTES.ARTICLE + '/' + article);
                setArticle(response.data.article);
                console.log(response.data);
                setPictures(response.data.picture);
            } catch (error) {
                console.error('Erreur:', error);
            } finally {
                setLoading(false);
            }
        };
        getArticle()
    }, [article]);


    useEffect(() => {
        const getPlaces = async () => {
            try {
                const response = await axios.get(API_ROUTES.PLACE + '/' + place);
                setPlaces(response.data.place);
            } catch (error) {
                console.error('Erreur:', error);
            } finally {
                setLoading(false);
            }
        };
        getPlaces()
    }, [place]);

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
        <div>
            <div className='flex container main'>
                <div className='flex-column center'>
                    <h2>{articles.title}</h2>
                    <h4>{articles.subtitle}</h4>

                    {pictures && pictures.length > 0 ? (
                        <div className="carousel">
                            {pictures && pictures.length > 1 ? (
                                <div>
                                    <button onClick={previousSlide}><FontAwesomeIcon icon={faCircleChevronLeft} /></button>
                                    <button onClick={nextSlide}><FontAwesomeIcon icon={faCircleChevronRight} /></button>
                                </div>) : <div></div>}
                            <img src={`${API_ROUTES.IMG}${pictures[currentIndex].picture}`} alt={pictures[currentIndex].alt_picture} className='float-left width480' />
                            <p className='left'>{articles.description}</p>
                        </div>
                    ) : <div><p className='left'>{articles.description}</p></div>}
                </div>
            </div>
            {place !== null ? (
                <div className='flex container home_map'>
                    <NavLink to={`/place/${places.id}`}>
                        <FontAwesomeIcon icon={faLocationDot} style={{ top: places.latitude, left: places.longitude }} />
                        <div className='none btn' style={{ top: `calc(${places.latitude} - 10%)`, left: `calc(${places.longitude} - 100px)` }}>{places.title}</div>
                    </NavLink>
                    <img src={Map} alt={Map} />
                </div>
            ) : <div></div>}
        </div>
    );
}

export default Show;