import React from 'react';
import './Header.css';

const Header = () => (
  <header className="header">
    <img src="/assets/images/logo.png" alt="Logo" />
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
  </header>
);

export default Header;
