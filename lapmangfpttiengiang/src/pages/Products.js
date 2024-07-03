import React, { useState, useEffect } from 'react';
import Header from '../components/Header';
import Footer from '../components/Footer';
import ProductCard from '../components/ProductCard';
import './Products.css';
import { fetchProducts } from '../services/productService';

const Products = () => {
    const [products, setProducts] = useState([]);

    useEffect(() => {
        fetchProducts().then(data => setProducts(data));
    }, []);

    return (
        <div>
            <Header />
            <main>
                <h1>Our Products</h1>
                <div className="product-list">
                    {products.map(product => (
                        <ProductCard key={product.id} product={product} />
                    ))}
                </div>
            </main>
            <Footer />
        </div>
    );
};

export default Products;
