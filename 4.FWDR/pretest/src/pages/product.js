import React, { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';

function Product({ data }) {
    const nav = useNavigate();


    const [sProduct, setProduct] = useState("");
    const [db, setDB] = useState(data);

    const fnSearch = () => {
        const regex = new RegExp(sProduct, "gi");
        setDB(data.filter(x => x.name.search(regex) === -1));
    }

    // ham xu ly su kien click nut remove de xoa 1 san pham co ma so id
    function remove(id) {
        if (window.confirm(`are u sure to delete product [code ${id}] ?`)) {
            let i = data.map(x => x.id).indexOf(id);
            setDB(data.splice(i, 1));
            // data.splice(i,1);
            console.log(data);
            console.log(db);
            nav("/products");
        }
    }

    // render 
    return (
        <div className='list ms-5'>
            <h3>List of products</h3>
            <hr />
            <Link to="/create" className='App-link'>Create new product</Link> <br /><br />

            <input name='search' placeholder='enter product name' value={sProduct}
                onChange={(e) => setProduct(e.target.value)} />

            <button type='button' onClick={fnSearch}> search</button>

            <table className='table table-hover table-striped' >
                {/* tieu de bang */}
                <thead>
                    <tr>
                        <th>sr.no</th>
                        <th>id</th>
                        <th>name</th>
                        <th>price</th>
                        <th>action</th>
                    </tr>
                </thead>

                {/* content chua danh sach san pham */}
                
                <tbody>
                    {
                        db.map((x, index) => (
                            <tr>
                                <td>{index + 1}</td>
                                <td>{x.id}</td>
                                <td>{x.name}</td>
                                <td>{x.price}</td>
                                <td>
                                    <button className='btn btn-info ms-2'
                                        onClick={() => nav(`/edit/${x.id}`)}
                                    >
                                        edit
                                    </button>

                                    <button className='btn btn-danger ms-2'
                                        onClick={(e) => remove(x.id)} >
                                        remove
                                    </button>
                                </td>
                            </tr>

                        ))
                    }


                </tbody>
            </table>
        </div>
    );
}

export default Product;