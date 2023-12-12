import React from 'react';
import './d02.css'

export function Product(props) {
    let pic = `/images/${props.pic}`;
    return (
        <div>
            <img src={pic}
                alt={props.name}
                className='pic'/> <br />
            <p>Name = {props.name} </p>
            <p>Price = {props.price}  </p>
        </div>
    );
}






// export function Gallery(props) {
//     data.map((x) =>  console.log(x.name) )
//     return (
//         <div>
//             {data.map((x) =>  <Product name={x.name} price={x.price} pic={x.pic} />)}
//         </div>
//     );
// }