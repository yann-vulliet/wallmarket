import React from 'react';
import { useEffect } from 'react';

const Logout = () => {
    useEffect(() => {
        const logout = async () => {
            try {
                const response = await fetch('/api/logout', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                });
                if (response.ok) {
                    localStorage.removeItem('acces_token');
                    window.location.reload();
                } else {
                    console.error('Échec de la déconnexion de l\'API');
                }
            } catch (error) {
                console.error('Erreur lors de la déconnexion de l\'API:', error);
            }
        };
        logout();
    }, []);

    return (
        <div>

        </div>
    );
}

export default Logout;