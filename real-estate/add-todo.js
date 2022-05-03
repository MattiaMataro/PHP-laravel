function addTodo(userId, todo) {
    fetch(`http://jsonplaceholder.typicode.com/users/${userId}/todos`, {
        body:{
            ...todo
        },
        method:'POST'
    })
    .then(res=>res.json())
    .then(t=>console.log(t));
}

const n1 = [1, 2, 3];
const n2 = [...n1, 4, 5, 6];

cons