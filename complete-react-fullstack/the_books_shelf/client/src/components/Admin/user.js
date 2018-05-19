import React from 'react';

const User = (props) => {

  return (
    <div className="user_container">
      <div className="avatar">
        <img alt="avatar" src="/images/avatar.png" />
      </div>
      <div className="nfo">
        <div><span>Nome:</span> {props.user.name}</div>
        <div><span>Email:</span> {props.user.email}</div>
      </div>
    </div>
  )
}

export default User;