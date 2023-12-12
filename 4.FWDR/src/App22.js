import './App.css';
import { Gallery, Product } from './d02/demo2';


function App() {
  return (
    <div className="App">
      <header className="App-header">
            {/* <Product pic="/images/chirstmas-tree-1.jpg" 
            name="chirstmas-tree-1" 
            price="100" /> */}

            <Product name="cay thong noel" 
                     price="2.5678"
                     pic="chirstmas-tree-1.jpg" />

      </header>
    </div>
  );
}

export default App;
