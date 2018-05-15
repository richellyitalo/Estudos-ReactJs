import React from 'react';
import { Link } from 'react-router-dom';

const Artistlist = (props) =>{
    return props.artists && props.artists.length > 0
            ? (<div className="artist_container">
                { props.artists.map( item => (
                    <Link to={`/artist/${item.id}`} key={item.id} className="artist_item" >
                    
                        <div className="cover" style={{
                                background:`url(/images/${item.cover})`
                            }}>
                        <div>
                            {item.name}
                        </div>
                        </div>
                    </Link>
                    ))
                }
            </div>)
            : null;
}

export default Artistlist;