import moment from 'moment'

export const dateReadable = (date, toFormat = 'DD/MM/Y') =>
  moment(date).format(toFormat)
