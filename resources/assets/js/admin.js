window.base_api = '/admin';

import getFormResults from './helper.js';
import Errors from './classes/Errors';
let errors = new Errors();

function startLoading() {
    $("#loader").removeClass("hidden");
}

function endLoading() {
    $("#loader").addClass("hidden");
}

// LOGOUT
$("#btn-logout").on('click', function(evt) {
    axios.post('/logout', {})
        .then(function (response) {
            window.location.href = '/';
        })
        .catch(function (error) {
            console.log(error);
        });
});

/**
 * Update/create user
 */
$("#update-user").submit(function( event ) {
    errors.clear();
    let data = getFormResults(this);
    startLoading();

    if(data['id'] != undefined) { // UPDATE USER
        axios.put(base_api +'/users/'+ data['id'], data)
            .then(function (response) {
                location.reload();
            })
            .catch(function (error) {
                errors.record(error.response.data.details);
                errors.show();
            });
    } else { // NEW USER
        axios.post(base_api +'/users', data)
            .then(function (response) {
                window.location.href = '/admin/users';
            })
            .catch(function (error) {
                errors.record(error.response.data.details);
                errors.show();
            });
    }

    endLoading();
    event.preventDefault();
});

/**
 * Delete user
 */
$("#btn-delete-user").on('click', function(evt) {

    let user_id = $(this).attr("data-user-id");

    axios.delete(base_api + '/users/'+user_id, {})
        .then(function (response) {
            window.location.href = '/admin/users';
        })
        .catch(function (error) {
            console.log(error);
        });
});

/**
 * Open user avatar upload dialog
 */
$("#btn-avatar-upload").on('click', function(evt) {
    $("#input-avatar-upload").click();
});

/**
 * Upload user avatar
 */
$("#input-avatar-upload").on('change', function(evt) {
    let files = evt.target.files;
    let formData = new FormData();
    formData.append('file',files[0]);
    let config = {
        headers: {
            'content-type': 'multipart/form-data'
        }
    };
    startLoading();
    axios.post(base_api + '/users/avatar-upload', formData, config)
        .then(response => {
            console.log(response.data);
            $("#img-user-avatar").attr("src","/"+response.data);
            $("#input-user-avatar").val(response.data);
            endLoading();
        }).catch(function (error) {
            console.log(error);
            endLoading();
    })

});


