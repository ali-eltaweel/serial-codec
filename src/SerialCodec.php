<?php

namespace Codecs;

/**
 * A codec for serializing and deserializing data.
 * 
 * @api
 * @since 1.0.0
 * @version 1.0.0
 * @package serial-codec
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
class SerialCodec implements ICodec {

    /**
     * Creates a new instance of the SerialCodec class.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param array<class-string>|bool $allowedClasses
     * @param int $maxDepth
     */
    public function __construct(public readonly array|bool $allowedClasses = true, public readonly int $maxDepth = 4096) {}
    
    /**
     * Encodes a value into a string representation.
     * 
     * @api
     * @final
     * @override
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param mixed $value
     * @return string
     */
    public final function encode(mixed $value): string {

        return serialize($value);
    }

    /**
     * Decodes a string representation back into its original value.
     * 
     * @api
     * @final
     * @override
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $code
     * @return mixed
     */
    public final function decode(string $code): mixed {

        return unserialize($code, [ 'allowed_classes' => $this->allowedClasses, 'max_depth' => $this->maxDepth ]);
    }
}
