import React from 'react';
import Fontawesome from 'react-fontawesome';
import { Link } from 'react-router-dom';
import { connect } from 'react-redux';

const SidenavItems = (props) => {

  const items = [
    {
      type: 'navItem',
      icon: 'home',
      text: 'Home',
      link: '/',
      restricted: false
    },
    {
      type: 'navItem',
      icon: 'file-text-o',
      text: 'My Profile',
      link: '/user',
      restricted: true
    },
    {
      type: 'navItem',
      icon: 'file-text-o',
      text: 'Add Admins',
      link: '/user/register',
      restricted: true
    },
    {
      type: 'navItem',
      icon: 'sign-in',
      text: 'Login',
      link: '/login',
      restricted: false,
      exclude: true
    },
    {
      type: 'navItem',
      icon: 'file-text-o',
      text: 'My reviews',
      link: '/user/user-reviews',
      restricted: true
    },
    {
      type: 'navItem',
      icon: 'file-text-o',
      text: 'Add Reviews',
      link: '/user/add',
      restricted: true
    },
    {
      type: 'navItem',
      icon: 'sign-out',
      text: 'Logout',
      link: '/user/logout',
      restricted: true
    }
  ];

  const itemContainer = (item, i) => (
    <div key={i} className={item.type}>
      <Link to={item.link} onClick={props.hideNav}>
        <Fontawesome name={item.icon} />
        {item.text}
      </Link>
    </div>
  )
  
  const renderItems = () => {
    return items.map((item, i) => {
      let login = props.users.login;

      if (login) {
        return !item.exclude ? itemContainer(item, i) : null;
      } else {
        return !item.restricted ? itemContainer(item, i) : null;
      }
    })
  }

  return (
    <div>
      { renderItems() }
    </div>
  )
}

function mapStateToProps(state) {
  return {
    users: state.users
  }
}

export default connect(mapStateToProps)(SidenavItems);