import http from '../../services/http'

import { ADD_CLIENT, FETCH_CLIENTS, SET_CLIENT } from '../types'
import { setAlert } from './commonActions'
import { message } from 'antd'

export const addClient = (clientData, history) => dispatch => {
  // dispatch(setLoading())

  http.post('/admin/clients', clientData).then(res => {
    dispatch({
      type: ADD_CLIENT,
      payload: res.data
    })

    dispatch(setAlert('Atualização realizada com sucesso!', 'success'))

    // dispatch(setLoading(false))

    history.push('/')
  })
}

export const updateClient = (clientData, id, history) => async dispatch => {
  await http.put(`/admin/clients/${id}`, clientData)

  dispatch(setAlert('Cadastro realizado com sucesso!', 'success'))

  history.push('/')
}

export const deleteClient = (id, history) => async dispatch => {
  const res = await http.delete(`/admin/clients/${id}`)

  message.success('Cliente removido com sucesso!');

  dispatch(fetchClients())
}

export const fetchClients = (page = 1) => dispatch => {
  http.get(`/admin/clients?page=${page}`).then(res => {
    dispatch({
      type: FETCH_CLIENTS,
      payload: res.data
    })
  })
}

export const fetchClient = (id) => dispatch => {
  http.get(`/admin/clients/${id}`).then(res => {
    dispatch({
      type: SET_CLIENT,
      payload: res.data
    })
  })
}
