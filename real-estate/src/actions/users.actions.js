export const ADD_USERS = "ADD_USERS";
export const DELETE_USER = "DELETE_USER";

export const addUsers = (users) => ({
    type: ADD_USERS,
    users,
});

export const deleteUser = (user) => ({
    type: DELETE_USER,
    user,
});
