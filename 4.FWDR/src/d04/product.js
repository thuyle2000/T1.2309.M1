import { useState } from "react";
import { Link } from "react-router-dom";



function Product({ db }) {
    const [pid, setID] = useState("P01");
    const [pname, setName] = useState("Chocolate");
    const [pprice, setPrice] = useState("12.98");

    return (
        <div>
            <h3>List of Products</h3>
            <hr/>
            <Link to="/create">Create New Product</Link>
            <table className="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>price</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        db.map(x => (
                            <tr>
                                <td>{x.id}</td>
                                <td>{x.name}</td>
                                <td>{x.price}</td>
                                <td>
                                    <button className="btn btn-info"> edit </button> 
                                    <button className="btn btn-danger"> remove </button>
                                </td>
                            </tr>
                        )
                        )
                    }
                </tbody>
            </table>

        </div>
    );
}

export default Product;