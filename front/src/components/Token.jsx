import { jwtDecode } from "jwt-decode";

const getToken = () => {
    return localStorage.getItem("access_token");
};

const getDecodedToken = () => {
    if (getToken()) {
        return jwtDecode(localStorage.getItem("access_token"));
    } else {
        return false;
    }
};

const getExpiryTime = () => {
    if (getDecodedToken() && !(getDecodedToken().exp * 1000 < Date.now())) {
        return true;
    } else {
        return localStorage.removeItem("access_token");
    }
};

const getEmail = () => {
    if (getExpiryTime()) {
        return getDecodedToken().email;
    } else {
        return false;
    }
};

const getRoles = () => {
    if (getExpiryTime()) {
        return getDecodedToken().role;
    } else {
        return false;
    }
};


export default {
    getToken,
    getDecodedToken,
    getExpiryTime,
    getEmail,
    getRoles
};