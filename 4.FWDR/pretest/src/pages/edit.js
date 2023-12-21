import React, { useState } from 'react';
import { useNavigate, useParams } from 'react-router-dom';

function Edit({ data }) {
    const { id } = useParams();

    //lay san pham co ma so {id} trong tap du lieu {data}
    const index = data.map(x => x.id).indexOf(id);
    const item = data[index];

    const navigate =  useNavigate() ;

    const [name, setName] = useState(item.name); 
    const [price, setPrice] = useState(item.price); 
    const [pic, setPic] = useState(item.pic); 

    const handleSubmit = (e) => {
        e.preventDefault();
        let a = id.trim();
        let b = name.trim();
        let c = price.trim();


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
            let re = /^\d+(\.\d{1,4})?$/  
            if(re.test(c)){
                item.name= name;
                item.price = price;
                item.pic = pic;
                navigate("/products")
            }
            else{
                alert('invalid price')
            }

        }

    } 

    const form_style={
        textAlign : 'left'
    }
    return (

        <div>
            <h2>Edit Product</h2>
            <form className={form_style} >
                <label>ID</label> <br /> 
                <input type='text' id='id' name='id' value={item.id} readOnly  />
                <br />

                <label>Name</label> <br />
                <input type='text' id='name' name='name' 
                    value={name}
                    maxLength={30}
                    onChange={(e) => setName(e.target.value)} required />
                <br />

                <label>Price</label> <br />
                <input type='text' id='price' name='price'
                    value={price}
                    pattern='\d+(\.\d{1,4})?'
                    onChange={(e) => setPrice(e.target.value)} required />
                <br />

                <label>Pic</label> <br />
                <input type='text' id='pic' name='pic'
                    value={pic}
                    onChange={(e) => setPic(e.target.value)} required />
                <br /><br />

                <button onClick={(e) => handleSubmit(e)}>Save </button>
            </form>

        </div>
    );
}

export default Edit;