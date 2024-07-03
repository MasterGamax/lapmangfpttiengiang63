import React from 'react';
import Header from '../components/Header';
import Footer from '../components/Footer';
import './Home.css';

const Home = () => (
    <div>
        <Header />
        <main>
            <h1>Welcome to FPT Shop</h1>
            <p>Your one-stop shop for all FPT products.</p>
        </main>
        <Footer />
    </div>
);

export default Home;
