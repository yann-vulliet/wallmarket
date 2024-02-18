import React from 'react';

import HomeShow from '../pages/articles/HomeShow';
import MiniMap from '../components/MiniMap';
import ArticleRandom from '../pages/articles/ArticlesRandom';

const Home = () => {
    return (
        <main className='container'>
            <div className='home_article'>
                <HomeShow />
            </div>
            <MiniMap />
            <div className='home_articles_list'>
                <ArticleRandom />
            </div>
        </main>
    );
}

export default Home;