import React, { useState } from 'react';
import data from '../products.json'

function Gallery(props) {

    const [list, setList] = useState(data);
    const [viewItem, setViewItem] = useState(null)
    
    function remove(id){
        let r = window.confirm("are u sure ?");
        if(r===true){
            setList(list.filter((list) => list.id !== id))
        }
    }

    function viewDetails (item) {
        setViewItem(item)
    }

    return (
        <div>
            <h2>List of Products</h2>
            <hr />
            <table className='table table-hover table-striped'>
                <thead> 
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>price</th>

                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    {list.map((x) => (
                        <tr>
                            <td>{x.id}</td>
                            <td>{x.name}</td>
                            <td>{x.price}</td>
                            <td>
                                {/* <button className='btn btn-info'
                                onClick={(e) =>(alert("dont' click me again !"))}
                                >
                                    view
                                </button> */}
                                <button className='btn btn-info' onClick={() => viewDetails(x)}> View Details</button> 
                                <button className='btn btn-danger'  onClick={()=>remove(x.id)}>remove</button>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>

            {
                viewItem && (
                    <div style={{margin: 10}}> 
                        <h2>Details</h2>
                        <p>Id: {viewItem.id}</p>
                        <p>Name: {viewItem.name}</p>
                        <p>Price: {viewItem.price}</p>
                        <p>Img: <img src={`/images/${viewItem.pic}`} style={{width: 150, borderRadius: 20}}/></p>
                        <button className='btn btn-danger' onClick={() => viewDetails(null)}>Close</button>
                    </div>
                )
            }            
        </div>
    );
}

export default Gallery;