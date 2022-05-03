import { addUsers } from "./actions/users.actions";
import { Address } from "./models/address";
import { Company } from "./models/company";
import { Geo } from "./models/geo";
import { User } from "./models/user";

import { store } from "./store";

console.log(store.getState());

function load() {
  fetch("http://jsonplaceholder.typicode.com/users")
    // Trasformo la stringa JSON in oggetto / array
    .then((res) => res.json())
    // Trasformo gli oggetti (o l'oggetto) in Model
    .then((users) =>
      users.map(
        (user) =>
          new User(
            user.id,
            user.username,
            user.email,
            user.name,
            user.phone,
            user.website,
            new Address(
              user.address.street,
              user.address.city,
              user.address.zipCode,
              user.address.suite,
              new Geo(user.address.geo.lat, user.address.geo.lng)
            ),
            new Company(
              user.company.name,
              user.company.bs,
              user.company.catchPhrase
            )
          )
      )
    )
    .then((users) => store.dispatch(addUsers(users)));
  // // Popolo la tabella
  // .then((users) => {
  //   const tbody = document.querySelector("table > tbody");
  //   tbody.innerHTML = ""; // Svuoto il contenuto del body della tabella

  //   for (const user of users) {
  //     tbody.innerHTML += `
  //     <tr data-user-id="${user.id}">
  //       <td>${user.id}</td>
  //       <td>${user.name}</td>
  //       <td>${user.email}</td>
  //       <td>${user.username}</td>
  //       <td>
  //         <button class="btn btn-danger delete">Delete</button>
  //       </td>
  //     </tr>
  //   `;
  //   }

  //   const buttons = document.querySelectorAll("button.delete");

  //   for (const button of buttons) {
  //     button.addEventListener("click", (e) => {
  //       const userId = e.target.parentElement.parentElement.dataset.userId;

  //       fetch(`http://jsonplaceholder.typicode.com/users/${userId}`, {
  //         method: "DELETE",
  //       }).then((res) => {
  //         if (!res.ok) {
  //           return;
  //         }

  //         e.target.parentElement.parentElement.remove();
  //       });
  //     });
  //   }
  // });
}

store.subscribe(() => {
  console.log(store.getState());

  const users = store.getState().users;
  const tbody = document.querySelector("table > tbody");
  tbody.innerHTML = ""; // Svuoto il contenuto del body della tabella

  for (const user of users) {
    tbody.innerHTML += `
    <tr data-user-id="${user.id}">
      <td>${user.id}</td>
      <td>${user.name}</td>
      <td>${user.email}</td>
      <td>${user.username}</td>
      <td>
        <button class="btn btn-danger delete">Delete</button>
      </td>
    </tr>
  `;
  }

  const buttons = document.querySelectorAll("button.delete");

  for (const button of buttons) {
    button.addEventListener("click", (e) => {
      const userId = e.target.parentElement.parentElement.dataset.userId;

      fetch(`http://jsonplaceholder.typicode.com/users/${userId}`, {
        method: "DELETE",
      }).then((res) => {
        if (!res.ok) {
          return;
        }

        e.target.parentElement.parentElement.remove();
      });
    });
  }
});

const reset = document.getElementById("reset");
reset.addEventListener("click", () => load());

load();
