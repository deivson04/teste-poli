
import './App.css';
import React from 'react';
import { Value } from 'sass';

// import App from './App';


function App() {
   
  const handleSubmit = (e) =>{
    e.prevenDefaul();
    const formData = new FormData(e.target);
   
    const data = Object.fromEntries(formData);
   
   console.log('*** handleSubmit', data);
  };
  
  return ( 
  <form onSubmit={handleSubmit}>
    <input type="text" name="email" placeholder="Email"  />
    <button type="submit">Enviar</button>
  </form>
  
  );
}

export default App;
