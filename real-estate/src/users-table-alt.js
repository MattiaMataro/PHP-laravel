import { Address } from "./models/address";
import { Company } from "./models/company";
import { Geo } from "./models/geo";
import { User } from "./models/user";

let usersByCall = [];

function drawTableRows(users) {
  const tbody = document.querySelector("table > tbody");
  tbody.innerHTML = ""; // Svuoto il contenuto del body della tabella

  for (const user of users) {
    tbody.innerHTML += `
      <tr>
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
      e.target.parentElement.parentElement.remove();
    });
  }
}

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
  // Popolo la tabella
  .then((users) => {
    usersByCall = users;
    drawTableRows(users);
  });

const reset = document.getElementById("reset");
reset.addEventListener("click", () => {
  drawTableRows(usersByCall);
});
