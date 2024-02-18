const API_URL = "http://127.0.0.1:8000/"

export const API_ROUTES = {
    IMG: `${API_URL}storage/uploads/`,

    REGISTER: `${API_URL}api/register`,
    LOGIN: `${API_URL}api/login`,
    LOGOUT: `${API_URL}api/logout`,

    CURRENTUSER: `${API_URL}api/currentuser`,
    USERS: `${API_URL}api/users`,

    ROLE: `${API_URL}api/roles`,

    CATEGORY: `${API_URL}api/categories`,

    ARTICLE: `${API_URL}api/articles`,

    PLACES: `${API_URL}api/places`,
    PLACE: `${API_URL}api/place`,

    PICTURES: `${API_URL}api/pictures`,
    PICTURE: `${API_URL}api/picture`,
};