import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Token from './components/Token'

import Header from './components/Header';
import Footer from './components/Footer';

import Home from "./pages/Home";

import Articles from "./pages/articles/Index";
import ArticleShow from "./pages/articles/Show";
import AddArticle from "./pages/articles/Create";
import EditArticle from "./pages/articles/Edit";

import ArticlePicture from "./pages/picture/Article";
import PlacePicture from "./pages/picture/Place";


import IndexPlace from "./pages/places/Index";
import ShowPlace from "./pages/places/Show";
import Places from "./pages/places/IndexAll";

import Register from "./pages/users/Register";
import Login from "./pages/users/Login";
import Logout from "./pages/users/Logout";

const App = () => {
  return (
    <BrowserRouter>
      <Header />
      <Routes>
        <Route path="*" element={<Home />} />
        <Route path="/" element={<Home />} />

        <Route path="/register" element={<Register />} />
        <Route path="/login" element={<Login />} />


        <Route
          path="/logout"
          element={
            Token.getExpiryTime()
              ? <Logout />
              : <Login />
          }
        />

        <Route path="/users" element={<Home />} />
        <Route path="/users/:user" element={<Home />} />
        <Route path="/currentuser" element={<Home />} />

        <Route path="/roles" element={<Home />} />
        <Route path="/role/create" element={<Home />} />
        <Route path="/role/:role" element={<Home />} />


        <Route
          path="/articles"
          element={
            Token.getExpiryTime()
              ? Token.getRoles() == 1 || Token.getRoles() == 2 ? <Articles /> : <Login />
              : <Login />
          }
        />

        <Route
          path="/articles/create"
          element={
            Token.getExpiryTime()
              ? Token.getRoles() == 1 || Token.getRoles() == 2 ? <AddArticle /> : <Login />
              : <Login />
          }
        />

        <Route
          path="/articles/edit/:articleId"
          element={
            Token.getExpiryTime()
              ? Token.getRoles() == 1 || Token.getRoles() == 2 ? <EditArticle /> : <Login />
              : <Login />
          }
        />


        <Route
          path="/places"
          element={
            Token.getExpiryTime()
              ? Token.getRoles() == 1 || Token.getRoles() == 2 ? <Places /> : <Login />
              : <Login />
          }
        />


        <Route
          path="/pictures/:articleId"
          element={
            Token.getExpiryTime()
              ? Token.getRoles() == 1 || Token.getRoles() == 2 ? <ArticlePicture /> : <Login />
              : <Login />
          }
        />
        <Route
          path="/picture/:placeId"
          element={
            Token.getExpiryTime()
              ? Token.getRoles() == 1 || Token.getRoles() == 2 ? <PlacePicture /> : <Login />
              : <Login />
          }
        />

        <Route path="/article/:article" element={<ArticleShow />} />

        <Route path="/place/create" element={<Home />} />
        <Route path="/place/:place" element={<ShowPlace />} />
        <Route path="/places/:category" element={<IndexPlace />} />

      </Routes>

      <Footer />
    </BrowserRouter>
  );
}

export default App;