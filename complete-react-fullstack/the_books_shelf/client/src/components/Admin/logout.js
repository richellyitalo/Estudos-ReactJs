import React from 'react';

const Logout = (props) => {

  localStorage.removeItem('token');

  setTimeout(() => {
    props.history.push('');
  }, 1000);

  return (
    <div className="logout_container">
      <h1>Até logo! <br/>Você será redirecionado...</h1>
    </div>
  )
} 

export default Logout;