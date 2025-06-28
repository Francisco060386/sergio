<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAYERAS UNISEX PARA SENTIRTE BIEN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0aeafa;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        section#productos {
            padding: 2rem;
            text-align: center;
        }

        section#productos h2 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .frase-destacada {
            font-style: italic;
            color: #666;
            margin-bottom: 2rem;
        }

        .filtros {
            margin-bottom: 1rem;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .filtros label {
            margin-right: 0.5rem;
        }

        .galeria-productos {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-top: 1rem;
            justify-content: center;
        }

        .producto {
            border: 1px solid #ddd;
            padding: 1rem;
            background-color: white;
            text-align: center;
            border-radius: 5px;
        }

        .producto img {
            width: 100%;
            max-height: 150px;
            object-fit: contain;
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        .producto h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .producto p {
            margin-bottom: 0.5rem;
        }

        .producto button {
            background-color: #333;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            cursor: pointer;
            margin: 0.5rem auto;
            display: block;
            border-radius: 5px;
        }

        .producto button:hover {
            background-color: #444;
        }

        #carrito {
            padding: 2rem;
            text-align: center;
            background-color: #eee;
        }

        #carrito h2 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        #carrito-lista {
            list-style-type: none;
            padding: 0;
            margin-bottom: 1rem;
            text-align: left;
        }

        #carrito-lista li {
            margin-bottom: 0.5rem;
            border-bottom: 1px solid #ddd;
            padding-bottom: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #carrito-total {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            text-align: left;
        }

        .pagos {
            margin-bottom: 1rem;
            text-align: left;
        }

        .pagos h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .pagos div {
            margin-bottom: 0.5rem;
        }

        #login, #registro {
            padding: 2rem;
            text-align: center;
            background-color: #fff;
            border-radius: 5px;
            margin: 1rem auto;
            max-width: 400px;
        }

        #login h2, #registro h2 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        #login-form, #registro-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto;
            width: 100%;
        }

        #login-form label, #registro-form label {
            margin-bottom: 0.5rem;
            text-align: left;
            width: 100%;
        }

        #login-form input, #registro-form input {
            padding: 0.5rem;
            margin-bottom: 1rem;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        #login-form button, #registro-form button {
            background-color: #333;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            font-size: 1rem;
        }

        #login-form button:hover, #registro-form button:hover {
            background-color: #444;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
            margin-top: 2rem;
            font-size: 0.9rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        footer .redes-sociales {
            margin-top: 0.5rem;
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 0.5rem 0;
            }

            .filtros {
                flex-direction: column;
                align-items: flex-start;
            }

            .filtros label {
                margin-right: 0;
            }

            .pagos {
                text-align: center;
            }

            .pagos div {
                margin: 0.5rem;
            }

            .galeria-productos {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .galeria-productos {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>PLAYERAS UNISEX PARA SENTIRTE BIEN</h1>
        <nav>
            <ul>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#carrito">Carrito</a></li>
                <li><a href="#login">Login</a></li>
                <li><a href="#registro">Registro</a></li>
            </ul>
        </nav>
    </header>

    <section id="productos">
        <h2>Nuestros Productos</h2>
        <p class="frase-destacada">Sencillez, comodidad y estilo en una sola prenda.</p>

        <div class="filtros">
            <label for="filtro-talla">Talla:</label>
            <select id="filtro-talla">
                <option value="todas">Todas</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>

            <label for="filtro-color">Color:</label>
            <select id="filtro-color">
                <option value="todos">Todos</option>
                <option value="rojo">Rojo</option>
                <option value="azul">Azul</option>
                <option value="verde">Verde</option>
                <option value="negro">Negro</option>
                <option value="amarillo">Amarillo</option>
                <option value="naranja">Naranja</option>
                <option value="morado">Morado</option>
                <option value="blanco">Blanco</option>
            </select>
        </div>

        <div class="galeria-productos">
            <div class="producto" data-precio="250" data-talla="L" data-color="rojo">
                <img src="rojo.jpeg" alt="Playera Roja S">
                <h3>Playera Roja L</h3>
                <p>Precio: $250</p>
                <p>Talla: L</p>
                <p>Color: Rojo</p>
                <button onclick="agregarAlCarrito(1, 'Playera Roja L', 250, 'L', 'rojo')">Agregar al carrito</button>
            </div>
            <div class="producto" data-precio="250" data-talla="S" data-color="azul">
                <img src="azul.jpeg" alt="Playera Azul S">
                <h3>Playera Azul S</h3>
                <p>Precio: $250</p>
                <p>Talla: S</p>
                <p>Color: Azul</p>
                <button onclick="agregarAlCarrito(2, 'Playera Azul S', 250, 'S', 'azul')">Agregar al carrito</button>
            </div>
            <div class="producto" data-precio="255" data-talla="S" data-color="verde">
                <img src="verde.jpg" alt="Playera Verde S">
                <h3>Playera Verde S</h3>
                <p>Precio: $255</p>
                <p>Talla: S</p>
                <p>Color: Verde</p>
                <button onclick="agregarAlCarrito(3, 'Playera Verde S', 255, 'S', 'verde')">Agregar al carrito</button>
            </div>
            <div class="producto" data-precio="300" data-talla="XL" data-color="negro">
                <img src="negro.jpeg" alt="Playera negro XL">
                <h3>Playera Negra XL</h3>
                <p>Precio: $300</p>
                <p>Talla: XL</p>
                <p>Color: Negro</p>
                <button onclick="agregarAlCarrito(4, 'Playera Negra XL', 300, 'XL', 'negro')">Agregar al carrito</button>
            </div>
            <div class="producto" data-precio="305" data-talla="M" data-color="naranja">
                <img src="naranja.jpeg" alt="Playera Naranja M">
                <h3>Playera Naranja M</h3>
                <p>Precio: $305</p>
                <p>Talla: M</p>
                <p>Color: Naranja</p>
                <button onclick="agregarAlCarrito(5, 'Playera Naranja M', 305, 'M', 'naranja')">Agregar al carrito</button>
            </div>
            <div class="producto" data-precio="300" data-talla="M" data-color="morado">
                <img src="morado.jpg" alt="Playera Morado M">
                <h3>Playera Morado M</h3>
                <p>Precio: $300</p>
                <p>Talla: M</p>
                <p>Color: Morado</p>
                <button onclick="agregarAlCarrito(6, 'Playera Morado M', 300, 'M', 'morado')">Agregar al carrito</button>
            </div>
            <div class="producto" data-precio="355" data-talla="XL" data-color="blanco">
                <img src="blanco.jpeg" alt="Playera Blanco XL">
                <h3>Playera Blanco XL</h3>
                <p>Precio: $355</p>
                <p>Talla: XL</p>
                <p>Color: Blanco</p>
                <button onclick="agregarAlCarrito(7, 'Playera Blanca XL', 355, 'XL', 'blanco')">Agregar al carrito</button>
            </div>
            <div class="producto" data-precio="350" data-talla="L" data-color="amarillo">
                <img src="amarillo.jpg" alt="Playera amarilla L">
                <h3>Playera Amarilla L</h3>
                <p>Precio: $350</p>
                <p>Talla: L</p>
                <p>Color: Amarillo</p>
                <button onclick="agregarAlCarrito(9, 'Playera Amarilla L', 350, 'L', 'amarillo')">Agregar al carrito</button>
            </div>
        </div>
    </section>

    <section id="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="carrito-lista">
        </ul>
        <p id="carrito-total">Total: $0</p>

        <div class="pagos">
            <h3>Formas de Pago</h3>
            <div id="tarjeta-credito">
                <p>Tarjeta de crédito</p>
                <label for="numero-tarjeta">Número de tarjeta:</label>
                <input type="text" id="numero-tarjeta" name="numero_tarjeta">
                <label for="nombre-tarjeta">Nombre:</label>
                <input type="text" id="nombre-tarjeta" name="nombre_tarjeta">
                <label for="cantidad-tarjeta">Cantidad a pagar:</label>
                <input type="number" id="cantidad-tarjeta" name="cantidad_tarjeta">
            </div>
            <div id="paypal">
                <p>PayPal</p>
                <label for="cantidad-paypal">Cantidad a pagar:</label>
                <input type="number" id="cantidad-paypal" name="cantidad_paypal">
            </div>
            <div id="transferencia-bancaria">
                <p>Transferencia bancaria</p>
                <label for="nombre-banco">Nombre del banco:</label>
                <input type="text" id="nombre-banco" name="nombre_banco">
                <label for="cantidad-transferencia">Cantidad a pagar:</label>
                <input type="number" id="cantidad-transferencia" name="cantidad_transferencia">
            </div>
        </div>

        <button onclick="finalizarCompra()">Finalizar Compra</button>
    </section>

    <section id="login">
        <h2>Login</h2>
        <form id="login-form" method="post" action="">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" onclick="simularLogin()">Iniciar sesión</button>
        </form>
    </section>

    <section id="registro">
        <h2>Registro</h2>
        <form id="registro-form" method="post" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" onclick="simularRegistro()">Registrarse</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Playeras Unisex. Todos los derechos reservados.</p>
        <div class="redes-sociales">
            Síguenos en: Facebook - Instagram - Twitter
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            actualizarCarritoUI();
            aplicarFiltros();
            document.getElementById('filtro-talla').addEventListener('change', aplicarFiltros);
            document.getElementById('filtro-color').addEventListener('change', aplicarFiltros);          
            const productosIniciales = [
                { id: 1, nombre: 'Playera Roja L', precio: 250, talla: 'L', color: 'rojo', imagen: 'rojo.jpeg' },
                { id: 2, nombre: 'Playera Azul S', precio: 250, talla: 'S', color: 'azul', imagen: 'azul.jpeg' },
                { id: 3, nombre: 'Playera Verde S', precio: 255, talla: 'S', color: 'verde', imagen: 'verde.jpg' },
                { id: 4, nombre: 'Playera Negra XL', precio: 300, talla: 'XL', color: 'negro', imagen: 'negro.jpeg' },
                { id: 5, nombre: 'Playera Naranja M', precio: 305, talla: 'M', color: 'naranja', imagen: 'naranja.jpeg' },
                { id: 6, nombre: 'Playera Morado M', precio: 300, talla: 'M', color: 'morado', imagen: 'morado.jpg' },
                { id: 7, nombre: 'Playera Blanca XL', precio: 355, talla: 'XL', color: 'blanco', imagen: 'blanco.jpeg' },
                 { id: 9, nombre: 'Playera Amarilla L', precio: 350, talla: 'L', color: 'amarillo', imagen: 'amarillo.jpg' },
            ];


            const galeriaProductos = document.querySelector('.galeria-productos');
            galeriaProductos.innerHTML = ''; 

            productosIniciales.forEach(producto => {
                const productoHTML = document.createElement('div');
                productoHTML.classList.add('producto');
                productoHTML.dataset.precio = producto.precio;
                productoHTML.dataset.talla = producto.talla;
                productoHTML.dataset.color = producto.color;

                productoHTML.innerHTML = `
                    <img src="${producto.imagen}" alt="${producto.nombre}">
                    <h3>${producto.nombre}</h3>
                    <p>Precio: $${producto.precio}</p>
                    <p>Talla: ${producto.talla}</p>
                    <p>Color: ${producto.color}</p>
                    <button onclick="agregarAlCarrito(${producto.id}, '${producto.nombre}', ${producto.precio}, '${producto.talla}', '${producto.color}')">Agregar al carrito</button>
                `;

                galeriaProductos.appendChild(productoHTML);
            });
        });

        function agregarAlCarrito(productoId, nombreProducto, precio, talla, color) {
            let producto = {
                id: productoId,
                nombre: nombreProducto,
                precio: precio,
                talla: talla,
                color: color
            };

            let productoExistente = carrito.find(item => item.id === productoId);

            if (!productoExistente) {
                carrito.push(producto);
                total += precio;
                actualizarCarritoUI();
            } else {
                alert("Este producto ya está en el carrito.");
            }
        }

        function eliminarDelCarrito(productoId) {
            let index = carrito.findIndex(producto => producto.id === productoId);

            if (index !== -1) {
                total -= carrito[index].precio;
                carrito.splice(index, 1);
                actualizarCarritoUI();
            }
        }

        function actualizarCarritoUI() {
            let carritoLista = document.getElementById('carrito-lista');
            carritoLista.innerHTML = '';
            carrito.forEach(producto => {
                let nuevoItem = document.createElement('li');
                nuevoItem.textContent = `${producto.nombre} - $${producto.precio} - Talla ${producto.talla} - Color ${producto.color} - `;

                let botonEliminar = document.createElement('button');
                botonEliminar.textContent = 'Eliminar';
                botonEliminar.onclick = function () {
                    eliminarDelCarrito(producto.id);
                };

                nuevoItem.appendChild(botonEliminar);
                carritoLista.appendChild(nuevoItem);
            });

            let carritoTotal = document.getElementById('carrito-total');
            carritoTotal.textContent = 'Total: $' + total.toFixed(2);
        }

        function finalizarCompra() {
            if (carrito.length > 0) {
                alert('¡Gracias por tu compra! Total a pagar: $' + total.toFixed(2));
                carrito = [];
                total = 0;
                actualizarCarritoUI();

            } else {
                alert('Tu carrito está vacío.');
            }
        }

        function aplicarFiltros() {
            let filtroTalla = document.getElementById('filtro-talla').value;
            let filtroColor = document.getElementById('filtro-color').value;

            let productos = document.querySelectorAll('.producto');

            productos.forEach(producto => {
                let talla = producto.dataset.talla;
                let color = producto.dataset.color;
                let mostrar = true;

                if (filtroTalla !== 'todas' && talla !== filtroTalla) {
                    mostrar = false;
                }

                if (filtroColor !== 'todos' && color !== filtroColor) {
                    mostrar = false;
                }

                producto.style.display = mostrar ? 'block' : 'none';
            });
        }

        function simularLogin() {
            alert('¡Inicio de sesión exitoso!');
        }

        function simularRegistro() {
            alert('¡Registro exitoso!');
        }
    </script>
</body>
</html>