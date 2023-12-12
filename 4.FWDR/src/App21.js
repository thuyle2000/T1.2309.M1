import './App.css';
import { Greeting, Hello } from './d02/demo';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Hello name="Mr. Phong" />
        <Hello name="Ms. Lien" />
        <Greeting />
        <Greeting />
      </header>
    </div>
  );
}

export default App;
