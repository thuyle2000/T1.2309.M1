
import './App.css';
import {Link, Route, Routes } from 'react-router-dom';
import Gallery from './pages/gallery';
import Product from './pages/product';
import About from './pages/about';

import db from './products.json';
import Create from './pages/create';
import Edit from './pages/edit';

function App() {
  return (
    <div className="App">
      <h2>Product Management</h2>
      <hr/>
      <nav>
        <Link to="/" className='App-link'>Home</Link>
        <Link to="/products" className='App-link'>Product</Link>
        <Link to="/gallery" className='App-link'>Gallery</Link>
        <Link to="/about" className='App-link'>About-us</Link>
        
      </nav>

      <Routes>
        <Route path="/products" element={<Product data={db} />} />
        <Route path="/gallery" element={<Gallery />} />
        <Route path="/about" element={<About />} />
        <Route path="/create" element={<Create data={db} />} />
        <Route path="/edit/:id" element={<Edit data={db} />} />
      </Routes>

    </div>
  );
}

export default App;
