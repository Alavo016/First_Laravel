import React, { Component } from 'react';
import axios from 'axios'; // Pour effectuer des requêtes HTTP


    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('email-verification-result').style.display = 'none'; // Masquer le message au départ

        const checkEmailButton = document.getElementById('check-email-button');

        checkEmailButton.addEventListener('click', function () {
            const email = document.getElementById('email').value;

            // Envoyez une requête AJAX pour vérifier l'e-mail
            axios.post('{{ route() }}', { email: email })
                .then(function (response) {
                    if (response.data.exists) {
                        document.getElementById('email-verification-result').style.display = 'block';
                    } else {
                        document.getElementById('email-verification-result').style.display = 'none';
                    }
                })
                .catch(function (error) {
                    console.error(error);
                });
        });
    });
