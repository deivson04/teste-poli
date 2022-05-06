import { useState } from 'react';
import './App.css';
import React from 'react';
import api from '../../services/api';
// import { Value } from 'sass';

// import App from './App';


function App() {
  const [value, setValue] = useState('')  
  const handleInputChange = (e) => {
     console.log('*** handleInputChange', e.target.value);
  };
  
  const handleSubmit = (e) => {
      e.preventDefault();
      
      const formData = new FormData(e.target);

      const data = Object.fromEntries(formData)
       
      console.log('*** handleSubmit');
      setValue(e.target.value)
    
    };
  
  
  
  return ( 
  <form onSubmit={handleSubmit}>
    <input type="text" name="nome" placeholder="Nome" onChange={handleInputChange} value={value}/>
    <input type="text" name="idade" placeholder="Idade" onChange={handleInputChange} value={value}/>
    <input type="text" name="sexo" placeholder="Sexo" onChange={handleInputChange} value={value}/>
    <input type="text" name="number" placeholder="Number" onChange={handleInputChange} value={value}/>
    <input type="text" name="lat" placeholder="Lat" onChange={handleInputChange} value={value}/>
    <input type="text" name="lng" placeholder="Lng" onChange={handleInputChange} value={value}/>
    <button type="submit">Enviar</button>
  </form>
  
  );
}

export default App;
