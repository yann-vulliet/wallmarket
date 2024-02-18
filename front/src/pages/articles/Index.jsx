import React from "react";
import { API_ROUTES } from '../../components/Api';
import axios from "axios";
import { useState, useEffect } from 'react';
import { NavLink } from "react-router-dom";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPenToSquare, faImage, faTrash } from '@fortawesome/free-solid-svg-icons';

const ArticlesIndex = () => {
    const [articles, setArticles] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const getArticles = async () => {
            try {
                const response = await axios.get(API_ROUTES.ARTICLE, {
                    headers: {
                        Authorization: "Bearer" + localStorage.getItem("access_token"),
                    },
                });
                setArticles(response.data);
            } catch (error) {
                console.error('Error fetching data:', error);
            } finally {
                setLoading(false);
            }
        };
        getArticles();
    }, []);

    const deleteArticle = async (articleId) => {
        try {
            await axios.delete(API_ROUTES.ARTICLE + '/' + articleId, {
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
                <NavLink to="/articles/create" className="btn no-border main-color">Nouvelle article</NavLink>
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
                        {articles.map((article, index) => (
                            <tr key={index} >
                                <td>{article.title}</td>
                                <td>{article.subtitle}</td>
                                <td className="center">
                                    <div>
                                        <NavLink to={`/pictures/${article.id}`} className="btn no-border color-green"><FontAwesomeIcon icon={faImage} /></NavLink>
                                        <NavLink to={`/articles/edit/${article.id}`} className="btn no-border color-blue"><FontAwesomeIcon icon={faPenToSquare} /></NavLink>
                                        <button onClick={() => deleteArticle(article.id)} className="btn no-border color-red right"><FontAwesomeIcon icon={faTrash} /></button>
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

export default ArticlesIndex;