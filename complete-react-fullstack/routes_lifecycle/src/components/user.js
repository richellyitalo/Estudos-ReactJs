import React from 'react'

import UserHoc from '../hoc/userHoc'

const User = () => {
  return (
    <h1>Component User</h1>
  )
}

export default UserHoc(User, 'Jão')