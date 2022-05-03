import { ADD_USERS, DELETE_USER } from "../actions/users.actions";

export const usersReducer = (state = [], action) => {
  switch (action.type) {
    case ADD_USERS:
      break;
    case DELETE_USER:
      break;
    default:
      return state;
  }
};
