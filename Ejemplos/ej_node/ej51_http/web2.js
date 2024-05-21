const http = require('node:http')

const servidor = http.createServer((pedido, respuesta) => {
  const url = new URL('http://localhost:4444'+pedido.url)
  console.log(url)
  respuesta.writeHead(200, { 'Content-Type': 'text/html' })
  respuesta.write('<!doctype html><html><head></head><body>Hola mundo</body></html>')
  respuesta.end()
});

servidor.listen(4444)

console.log('Servidor web iniciado')