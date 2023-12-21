import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';

function Create({ data }) {
    const navigate = useNavigate();
    const [id, setId] = useState("");
    const [name, setName] = useState("");
    const [price, setPrice] = useState("");
    const [pic, setPic] = useState("");

    const handleSubmit = (e) => {
        e.preventDefault();
        let a = id.trim();
        let b = name.trim();
        let c = price.trim();
        let d = pic.trim();

        if (a === '') {
            alert('id must not be blank')
        }
        else if (b === '') {
            alert('name must not be blank')
        }
        else if (c === '') {
            alert('price must not be blank')
        }
        else {
            let newProduct = { id: a, name: b, price: c, pic: d }
            data.push(newProduct);
            navigate("/products")
        }


    }

    const form_style = {
        textAlign: 'left'
    }

    return (
        <div>
            <h2>Create Product</h2>
            <form onSubmit={handleSubmit} className={form_style}>
                <label>ID</label> <br />
                <input type='text' id='id' name='id'
                    pattern='p\d{2}' title='Ma SP: pxx, x:ky so'
                    onChange={(e) => setId(e.target.value)} required />
                <br />

                <label>Name</label> <br />
                <input type='text' id='name' name='name'
                    maxLength={30}
                    onChange={(e) => setName(e.target.value)} required />
                <br />

                <label>Price</label> <br />
                <input type='text' id='price' name='price'
                    pattern='\d+(\.\d{1,4})?'
                    onChange={(e) => setPrice(e.target.value)} required />
                <br />

                <label>Pic</label> <br />
                <input type='text' id='pic' name='pic'
                    onChange={(e) => setPic(e.target.value)} required />
                <br /><br />

                <button type='submit'>Create </button>
            </form>
        </div>
    );
}

export default Create;