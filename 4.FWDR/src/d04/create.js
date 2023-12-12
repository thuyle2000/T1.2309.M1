import { useState } from "react";
import { useNavigate } from "react-router-dom";

function Create({db}) {
    const [id, setID] = useState("P01");
    const [name, setName] = useState("Chocolate");
    const [price, setPrice] = useState("12.98");

    const nav = useNavigate();

    // ham xu ly su kien submit form
    const handleSubmit = (e)=>{
        e.preventDefault();

        // doc du lieu nhap tu cac o id, name, price
        let a = id.trim(), b = name.trim(), c= price.trim(), d="chirstmas-tree-3.jpg";
        
        //luu du lieu vo mang db
        db.push({id:a, name:b, price:c, pic:d});

        //dieu huong ve trang product 
        nav('/product');
    }

    return (
        <div>
            <h3>Create New Product</h3>
            <form>
                <input type="text" class="form-control"
                    placeholder="input id"
                    id="id" name="id" value={id} required
                    onChange={(e)=>setID(e.target.value)} />

                <input type="text" class="form-control mt-3"
                    placeholder="input name"
                    id="name" name="name" value={name} required
                    onChange={(e)=>setName(e.target.value)} />

                <input type="text" class="form-control mt-3"
                    placeholder="input price"
                    id="price" name="price" value={price} required
                    onChange={(e)=>setPrice(e.target.value)} />

                <input type="submit" value={"Submit"} onClick={(e)=>handleSubmit(e)} />
            </form>
        </div>
    );
}

export default Create;