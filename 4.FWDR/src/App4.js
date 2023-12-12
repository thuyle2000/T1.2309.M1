import React from 'react';
import "./App.css"
import { Link, Route, Routes } from 'react-router-dom';
import Product from './d04/product';
import Gallery from './d04/gallery';
import About from './d04/about';
import NotFound from './d04/notfound';
import data from './products.json';
import Create from './d04/create';

function App4(props) {
    return (
        <div>
            <h2>ReactJS Router Demo</h2>
            <hr/>

            {/* thiet ke he thong menu */}
            <nav>
                <ul>
                    <li> <Link to="/"> home</Link></li>
                    <li> <Link to="/product"> product</Link></li>
                    <li> <Link to="/gallery"> gallery</Link></li>
                    <li> <Link to="/about"> about-us</Link></li>
                </ul>
            </nav>

            {/* dinh nghia bo dinh tuyen de render cac component tuong ung khi dia chi url thay doi */}
            <Routes>
                <Route index element={<h3>Welcome to ReactJS</h3>} />
                <Route path='/product' element={<Product db={data}/>} />
                <Route path='/gallery' element={<Gallery/>} />
                <Route path='/about' element={<About/>} />
                <Route path='/create' element={<Create db={data}/>} />
                <Route path='*' element={<NotFound />} />
            </Routes>
        </div>
    );
}

export default App4;