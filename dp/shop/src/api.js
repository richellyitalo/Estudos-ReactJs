import axios from 'axios'

import { URL } from './config'

const api = axios.create({
  baseURL: URL
})

const apis = {
  loadCategorias: () => api.get('/categorias'),
  addCategoria: (categoria) => api.post('/categorias', categoria),
  deleteCategoria: (id) => api.delete('/categorias/' + id),
  updateCategoria: (categoria) => api.put('/categorias/' + categoria.id, categoria),
  addProduto: (produto) => api.post('/produtos', produto),
  loadProdutos: (categoriaID) => api.get(`/produtos?categoria=${categoriaID}`),
  getCategoria: categoriaID => api.get(`/categorias/${categoriaID}`),
  deleteProduto: (id) => api.delete('/produtos/' + id),
  readProduto: (id) => api.get('/produtos/' + id),
  updateProduto: (produto) => api.put('/produtos/' + produto.id, produto)
}

export default apis
